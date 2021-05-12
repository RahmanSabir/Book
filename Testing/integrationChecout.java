package integrationChecout;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class integrationChecout {

	public static void main(String[] args) {
		
			
			System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
			WebDriver driver = new ChromeDriver();
					
					driver.get("http://localhost/Book/login.php");
					
					driver.manage().window().maximize();
					
			        driver.findElement(By.name("username")).sendKeys("abir");
			        driver.findElement(By.name("password")).sendKeys("1");
			        
			       driver.findElement(By.name("submit")).click();
			       
			       driver.findElement(By.id("j")).click();
				
			       driver.findElement(By.id("c")).click();
			       
			       driver.findElement(By.id("d")).click();

			       driver.findElement(By.id("k")).click();
			       
			       driver.findElement(By.className("hvr-push img-padding")).click();
			       
			       driver.findElement(By.className("btn btn-success pull-left")).click();

	       
			       
			    String at = driver.getTitle();
				String et = "Successful Order";
				
					
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
