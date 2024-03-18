
		<p><?php
$host='localhost';
$database='sport';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Login']) && isset($_POST['Password'])){
    $Login=$_POST['Login'];
    $Password=$_POST['Password'];
	
	$chzapr = mysqli_query($link, "SELECT Imya from polzovat where Login ='".$Login."' and Password ='".$Password."'");
    if (mysqli_num_rows($chzapr) > 0) {
        $zapros = mysqli_fetch_assoc($chzapr);

        $_SESSION['zapros'] = [
            "Name" => $zapros['Name']
        ];
		
		echo "Имя: ".$_SESSION['zapros']['Name'];

    } else {
		echo "Неверный логин или пароль!";
    }
}
		?> </p>
		
      </form>