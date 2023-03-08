<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Repositories\UserRepository;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
       $user_repo = (new UserRepository);

        foreach ($rows as $row)
        {
            if(!empty($row['name'])){
                $name = $row['name'];
                $email = $row['email'];
                $role1 = $row['role_1'];
                $role2 = $row['role_2'];

                $user = $user_repo->findByEmail($email);

                $params =[
                        'name' => $name,
                        'email' => $email,
                        'password' => bcrypt('1234567890'),
                        'type' => $role1
                    ];


                if(!empty($user))
                {
                    $user = $user_repo->variable($user,$params);

                }else{
                    $user = $user_repo->store($params);
                }

                if(!empty($role2)){
                    $role = [$role1,$role2];
                    $user->syncRoles($role);
                }else{
                    $user->syncRoles($role1);
                }


            }
        }
    }

    public function headingRow(): int
    {
        return 1;
    }
}