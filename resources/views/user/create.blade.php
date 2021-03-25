<form method="POST" action="/user">
    @csrf

    <!-- to do y nghia for, name -->
    <label for="name">First name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="dob">Date of birth:</label><br>
    <input type="text" id="dob" name="dob">
    <div>
        <button type="submit">Submit</button>
    </div>
</form>