package userRegistration;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class userRegistration {

	public static void main(String[] args) {

			System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
			WebDriver driver = new ChromeDriver();
		
			driver.get("http://localhost/Book/login.php");
			
			driver.manage().window().maximize();
			
		       driver.findElement(By.id("m")).click();

			
			
	        driver.findElement(By.name("username")).sendKeys("riad");
	        driver.findElement(By.name("email")).sendKeys("riad@gmail.com");
            driver.findElement(By.name("password")).sendKeys("15");
	        
	       driver.findElement(By.className("btn btn-primary")).click();
	
			    String at = driver.getTitle();
				String et = "Registration";
				
					
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
