String ssid;
String password;
#include <WiFi.h> 

void setup() {

    ssid = "faclab";
    password = "faclab11";
  
    if (ssid == "" || password == "") {
      Serial.println("No values saved for ssid or password");
    }
    else {
      // Connect to Wi-Fi
      WiFi.mode(WIFI_STA);
      WiFi.begin(ssid.c_str(), password.c_str());
      Serial.print("Connecting to WiFi ..");
      while (WiFi.status() != WL_CONNECTED) {
        Serial.print('.');
        delay(1000);
      }
      Serial.println(WiFi.localIP());
    }


}

void loop() {
  // put your main code here, to run repeatedly:

}
