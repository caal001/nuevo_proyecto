
<?php //echo get_the_content(); ?>
<!--comentar-->
<section class="content">
<h2>complete the following form</h2>
    <p>
    <form method="get">        
        <fieldset>
            <legend>Personal information:</legend>
            <br>
            <label for="fname">First name:</label>
            <input type="text" name="fname" id="fname">

            <label for="lname">Last name: :</label>
            <input type="text" name="lname" id="lname">

            <label for="year_of_birth">Year of birth:</label>
            <input type="date" name="year_of_birth" id="year_of_birth" min="1930"></p>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address">

            <label for="email">Email:</label>
            <input type="email"name="email" id="email">

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone">
        </fieldset>        
    <br>
        <fieldset>
            <legend>Sexo:</legend>
            <label for="man">Man</label>
            <input type="radio" id="man" name="radio" value="m">
            <label for="woman">Woman</label>
            <input type="radio" id="woman" name="radio" value="w">              
        </fieldset>
    <br>
        <p> Enthusiast level:        
    <br>
        <input type="range" id="lista-rango" value="1" name="range" min="1" max="10" step="1">
        <fieldset>
            <legend>Category information</legend><br>
            <ul style="list-style-type:square">
            <li>American muscle
                <ul style="list-style-type:circle">
                    <li>Dodge</li>
                    <li>Ford</li>
                </ul>
            </li><br>
            <li>Europeans
                <ul style="list-style-type:circle">
                    <li>Audi</li>
                    <li>Mercedes</li>
                </ul>
            </li><br>
            <li>Japanese
                <ul style="list-style-type:circle">
                    <li>Toyota</li>
                    <li>Nissan</li>
                </ul>
            </li><br>
        </ul>
        </fieldset>       
    <br>
        <label for="cars">Choose a car category:</label>
        <select name="cars" id="cars">
            <optgroup label="American muscle cars">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="dodge">Dodge</option>
                <option value="ford">Ford</option>
            </optgroup>
            <optgroup label="Europeans cars">
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </optgroup>
            <optgroup label="Japanese cars">
                <option value="toyota">Toyota</option>
                <option value="nissan">Nissan</option>
            </optgroup>
        </select>    
    <br>
    <br>
        <label for="text">write a comment:</label>
        <textarea name="text" id="text" rows="4" cols="40" placeholder="write here"></textarea>
    <br>
        <input type="submit" value="Send">
        <input type="reset" value="delete">
    </p>
</form>
    </p>
</section>