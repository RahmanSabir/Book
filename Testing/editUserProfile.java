package editUserProfile;


import org.openqa.selenium.By;
//import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class editUserProfile {

	public static void main(String[] args) {
	
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/edit_user_profile.php?id=%205");
				
			driver.manage().window().maximize();

	        driver.findElement(By.name("uname")).sendKeys("abir");

		        driver.findElement(By.id("h")).click();
		        
		    String at = driver.getTitle();
			String et = "User Profile";
			

				if(at.equalsIgnoreCase(et))
				{
					System.out.println(" Test Successful");
					
				}
				
				else
				{
					System.out.println(" Failed");
				}

	

	}

}
