package replyToUser;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class replyToUser {

	public static void main(String[] args) {
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/admin/process_reply_contact.php?id=2");
				
				driver.manage().window().maximize();
				
		      
		       driver.findElement(By.name("query")).sendKeys("Yes Sir");
		       
		       driver.findElement(By.name("o")).click();

			
		    String at = driver.getTitle();
			String et = "Contact of Admin";
			
				
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
