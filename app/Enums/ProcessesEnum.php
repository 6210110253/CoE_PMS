<?php 

namespace App\Enums;

class ProcessesEnum{

    const PREPROJECT = "Pre-Project";
    const PROJECT_I = "Project I";
    const PROJECT_II = "Project II";
    const FINISHED = "Finished";
    const CANCEL = "Cancel";
    
    const ALL = [
        self::PREPROJECT,
        self::PROJECT_I,
        self::PROJECT_II,
        self::FINISHED 
        
    ];
}
