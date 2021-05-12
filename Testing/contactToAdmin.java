package contactToAdmin;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class contactToAdmin {

	public static void main(String[] args) {
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/contact.php?username=abir");

				driver.manage().window().maximize();

				
		       driver.findElement(By.name("nm")).sendKeys("abir");
		       driver.findElement(By.name("email")).sendKeys("abir@gmail.com");
		       driver.findElement(By.name("query")).sendKeys("Dhaka Area ?");
		       
		       driver.findElement(By.name("btn")).click();

			
		    String at = driver.getTitle();
			String et = "Contact";
			
				
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
