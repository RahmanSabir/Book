package logout;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class logout {

	public static void main(String[] args) {
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
	
		driver.get("http://localhost/Book/login.php");
		
		driver.manage().window().maximize();
		
        driver.findElement(By.name("username")).sendKeys("abir");
        driver.findElement(By.name("password")).sendKeys("1");
        
       driver.findElement(By.name("submit")).click();
       
       driver.findElement(By.id("dropdownMenuButton1")).click();
       
       driver.findElement(By.id("l")).click();

		    String at = driver.getTitle();
			String et = "Book";
			
				
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
