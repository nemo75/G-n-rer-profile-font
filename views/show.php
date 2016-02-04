<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');


?>
<h1 class="infos"> Name :  <?php echo $faker->name; ?>  </h1>
<h1 class="infos"> Address :  <?php echo $faker->address; ?> </h1>
<h1 class="infos"> Text :  <?php echo $faker->text; ?> </h1>
<h1 class="infos"> Company :  <?php echo $faker->company; ?> </h1>
<h1 class="infos"> PhoneNumber :  <?php echo $faker->phoneNumber; ?> </h1>
<h1 class="infos"> Timezone :  <?php echo $faker->timezone; ?> </h1>
<h1 class="infos"> Email :  <?php echo $faker->email; ?> </h1>
<h1 class="infos"> Username :  <?php echo $faker->username; ?> </h1>
<h1 class="infos"> Password :  <?php echo $faker->password; ?> </h1>
<h1 class="infos"> Type of Card :  <?php echo $faker->creditCardType; ?> </h1>
<h1 class="infos"> Number :  <?php echo $faker->creditCardNumber; ?> </h1>
<h1 class="infos"> Expiration :  <?php echo $faker->creditCardExpirationDateString; ?> </h1>

<form method="POST">
	<label>Choose your font !
		<input type="radio" name="font" value="verdana">Verdana
		<input type="radio" name="font" value="monospace">Monospace
		<input type="radio" name="font" value="indi flower">Indi Flower
	</label>
	<input type="submit" value="Envoyer">
</form>