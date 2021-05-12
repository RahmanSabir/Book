package addToCart;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class addToCart {

	public static void main(String[] args) {
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/book_details.php?id=1");
				
				driver.manage().window().maximize();
				
		      
		       driver.findElement(By.id("d")).click();
			
		    String at = driver.getTitle();
			String et = "Added Cart";
			
				
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
