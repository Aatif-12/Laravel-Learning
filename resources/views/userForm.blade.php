<div>
    <h1>Add New User</h1>
    <form action="addUser" method="post">
        @csrf
       <div class="input-wrapper">
        <input type="text" name="username" placeholder="Enter Name">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Enter Email">
        </div>

        <div class="input-wrapper">
            <input type="text" name="country" placeholder="Enter Country">
        </div>

        <div class="input-wrapper">
            <button type="Add New User">Add User</button>
        </div>
</div>


<div>
    <h1>New User</h1>
    <form action="addNew" method="post" >
        @csrf
        <div>
            <h5>User Skills</h5>
            <input type="checkbox" name="skill" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" value="Java" id="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill" value="C++" id="C++">
            <label for="C++">C++</label>
            <input type="checkbox" name="skill" value="Python" id="Python">
            <label for="Python">Python</label>
        </div>

        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h5>City</h5>
            <select name="city" id="">
                <option value="select" selected>Select</option>
                <option value="Dehli">Dehli</option>
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Yavatmal">Yavatmal</option>
            </select>
        </div>
        <div>
            <input type="range" name="age" min="18" max="100">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>


<style>
    .input-wrapper input{
        height: 35px;
        width: 50%;
        border: 2px solid orange;
        border-radius: 5px;
    }
    button{
        width: 50%;
        border: 2px solid orange;
        border-radius: 5px;
        color: rgb(0, 0, 0);
        background: rgb(217, 217, 219);
        height: 35px;
    }
    .input-wrapper{
        margin: 10px 0;
    }
</style>
