package src;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;


public class RandomDog {
    
    private static HttpURLConnection con;

    public static void main(String[] args) throws 
            MalformedURLException,
            ProtocolException, 
            IOException {
        
        String url = "https://random.dog/woof.json";
        
        try {
            
            URL myurl = new URL(url);
            con = (HttpURLConnection) myurl.openConnection();
            con.setRequestMethod("GET");
            StringBuilder content;

            try (BufferedReader in = new BufferedReader(
                    new InputStreamReader(con.getInputStream())
                )) {
                String line;
                content = new StringBuilder();
                while ((line = in.readLine()) != null) {
                    content.append(line);
                    content.append(System.lineSeparator());
                }
            }

            String contentString = content.toString();
            System.out.println(contentString);

        } finally {
            con.disconnect();
        }
    }
}
