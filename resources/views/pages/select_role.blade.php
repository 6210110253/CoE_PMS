<h1>Select Role Type</h1>
<br>
<div class="container">


  <div class="card">
    <div class="card-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
    </div>
    <div class="card-content">
      <a href="{{ route('admin.dashboard') }}">Admin Role</a>
    </div>
  </div>
  <div class="card">
    <div class="card-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><path fill="currentColor" d="M16.563 15.9c-.159-.052-1.164-.505-.536-2.414h-.009c1.637-1.686 2.888-4.399 2.888-7.07c0-4.107-2.731-6.26-5.905-6.26c-3.176 0-5.892 2.152-5.892 6.26c0 2.682 1.244 5.406 2.891 7.088c.642 1.684-.506 2.309-.746 2.396c-3.324 1.203-7.224 3.394-7.224 5.557v.811c0 2.947 5.714 3.617 11.002 3.617c5.296 0 10.938-.67 10.938-3.617v-.811c0-2.228-3.919-4.402-7.407-5.557zm-5.516 8.709c0-2.549 1.623-5.99 1.623-5.99l-1.123-.881c0-.842 1.453-1.723 1.453-1.723s1.449.895 1.449 1.723l-1.119.881s1.623 3.428 1.623 6.018c0 .406-3.906.312-3.906-.028z"/></svg>
    </div>
    <div class="card-content">

      <a href="{{ route('teacher.dashboard') }}">Teacher Role</a>
    </div>
  </div>
</div>

<style>
  @import url(https://fonts.googleapis.com/css?family=Poppins);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  display: grid;
  place-content: center;
  min-height: 100vh;
  font-family: Poppins;
}
.container {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  gap: 40px;
  align-content: center;
  text-align: center;
}
.card {
  border-radius: 4px;
  width: 350px;
  padding: 2rem;
  box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.15), -4px -4px 8px rgba(0, 0, 0, 0.05);
  background-color: #ffe;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.card-icon {
  background-color: yellow;
  font-size: 2rem;
  width: 4rem;
  height: 4rem;
  margin: auto;
  padding: 1rem;
  text-align: center;
  border-radius: 50%;
  display: grid;
  place-content: center;
  font-weight: 500;
  transition: 0.5s;
}
h1 {
  position: relative;
  text-align: center;
  color: #353535;
  font-size: 50px;
  font-family: "Cormorant Garamond", serif;
}

p {
  margin-top: 1rem;
}

a {
  text-decoration: none;
  color: currentcolor;
  border: none;
  margin-top: 1rem;
  display: inline-block;
  padding: 0.5rem 1.2rem;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
.card-content {
  position: relative;
  z-index: 1;
}

.card:hover a {
  background-color: white;
  color: black;
}
.card::before {
  width: 50%;
  height: 100%;
  content: "";
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
  z-index: 1;
}

.card:nth-of-type(1) .card-icon {
  background-color: darkorchid;
  box-shadow: 0 0 0 0 darkorchid;
}

.card:hover .card-content {
  color: white;
}

.card:nth-of-type(1):hover .card-icon {
  box-shadow: 0 0 0 400px darkorchid;
}

.card:nth-of-type(2) .card-icon {
  background-color: darkorange;
  box-shadow: 0 0 0 0 darkorange;
}

.card:nth-of-type(2):hover .card-icon {
  box-shadow: 0 0 0 400px darkorange;
}

.card:nth-of-type(3) .card-icon {
  background-color: teal;
  box-shadow: 0 0 0 0 teal;
}

.card:nth-of-type(3):hover .card-icon {
  box-shadow: 0 0 0 400px teal;
}

</style>
