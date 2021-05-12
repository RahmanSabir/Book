package addCatagoryByAdmin;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class addCatagoryByAdmin {

	public static void main(String[] args) {
		
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\sabir\\Downloads\\Compressed\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
				
				driver.get("http://localhost/Book/admin/insert.php?id=%204");
				
				driver.manage().window().maximize();
				
		      
		       driver.findElement(By.name("catt")).sendKeys("Pharmecy");
		       
		       driver.findElement(By.id("n")).click();

			
		    String at = driver.getTitle();
			String et = "Display";
			
				
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
