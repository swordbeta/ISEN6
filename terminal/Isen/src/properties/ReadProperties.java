package properties;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.util.Properties;

public class ReadProperties {

	Properties prop;
	public ReadProperties()
	{
		prop = new Properties();
		String propFileName = "config.properties";
		
		
		InputStream inputStream = getClass().getClassLoader().getResourceAsStream(propFileName);
		  if (inputStream == null) {
	            try {
					throw new FileNotFoundException("property file '" + propFileName + "' not found in the classpath");
				} catch (FileNotFoundException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
	        }
		 try {
			prop.load(inputStream);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
        
       
	}
	
	public String getPropertiesPin()
	{
		return prop.getProperty("propertiesPin");
	}
}
