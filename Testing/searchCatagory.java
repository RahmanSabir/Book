package searchCatagory;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class searchCatagory {

	public static void main(String[] args) throws InterruptedException {
	
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/index.php");
				
				driver.manage().window().maximize();
				
		        driver.findElement(By.id("dropdownMenuButton2")).click();
		       Thread.sleep(3000);
		        
		       driver.findElement(By.className("dropdown-item")).click();

			
		    String at = driver.getTitle();
			String et = "Catagory";
			
				
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
