void Line_Notify(String message); 
#include <ESP8266WiFi.h>
#include <WiFiClientSecureAxTLS.h> // กรณีขึ้น Error ให้เอาบรรทัดนี้ออก
                                                                                              //SoftwareSerial NodeSerial(D1, D2); // RX | TX
                                                                                              // Config connect WiFi
//#define WIFI_SSID "Robot-Room"
//#define WIFI_PASSWORD "AnOnMaKmEe@1438"
#define WIFI_SSID "hello"
#define WIFI_PASSWORD "00000000" 
                                                                                              // Line config
#define LINE_TOKEN "P1pf97PUwsSTMrO0zLlsxmGGx9pyYKKrZpz27BM4RND"
const char* host = "172.20.10.2";
const int trigPin = D1;                                                                       //ultrasonic
int echoPin = D2;                                                                             //ultrasonic
int i=1;
float duration,distance,Volume,Percentage,Waste;
String message1="%E0%B8%96%E0%B8%B1%E0%B8%87%E0%B8%82%E0%B8%A2%E0%B8%B0B01%0D%0A%E0%B8%9E%E0%B8%B4%E0%B8%81%E0%B8%B1%E0%B8%94+16%C2%B048%2720.3%22N+100%C2%B015%2719.4%22E%0D%0A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B8+80%25+%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%0D%0A"; // ArduinoIDE เวอร์ชั่นใหม่ ๆ ใส่ภาษาไทยลงไปได้เลย
String message2="%E0%B8%96%E0%B8%B1%E0%B8%87%E0%B8%82%E0%B8%A2%E0%B8%B0B01%0D%0A%E0%B8%9E%E0%B8%B4%E0%B8%81%E0%B8%B1%E0%B8%94+16%C2%B048%2720.3%22N+100%C2%B015%2719.4%22E%0D%0A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B8+100%25+%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%0D%0A";
String message3="HelloB01";
String Latitude    = "16.805635";
String Longtitude  = "100.255398";
float Width = 5  ;
float Lenght= 5  ;
float Height= 20 ;

void setup() 
{
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  Serial.begin(9600);

  WiFi.mode(WIFI_STA);
  // connect to wifi.
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("connecting");

  while (WiFi.status() != WL_CONNECTED) 
  {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.print("connected: ");
  Serial.println(WiFi.localIP());
  
}

void loop()
{
  CM();
  Serial.print("connecting to ");
  Serial.println(host);
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) 
  {
    Serial.println("connection failed");
    return;
  }
  else Serial.println("FINISH");
    int hellooo=478;
    String url = "/project/add.php?Volume="; //ชุด Directory ที่เก็บไฟล์ และตัวแปรที่ต้องการจะฝาก
    url += Volume; //ส่งค่าตัวแปร
    url += "&Zone=B&No=01";
    url += "&Latitude=";
    url += Latitude;
    url += "&Longtitude=";
    url += Longtitude;
    url += "&Waste=";
    url += Waste;
    url += "&Percentage=";
    url += Percentage;
    
    //Serial.print("\nAnalog reading = ");
    //Serial.println(fsrReading);     // the raw analog reading
    Serial.print("Requesting URL: ");
    Serial.println(url);
    client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
                "Connection: close\r\n\r\n");
    Serial.print(Latitude);
    delay(3600000);
    
} 

void CM() 
{ 
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
 
  duration   = pulseIn(echoPin, HIGH);
  distance   = (duration / 2) * 0.0343;
  Volume     = (Width * Lenght) * Height;
  Waste      = (Height - distance) * (Width * Lenght);
  Percentage = (Waste * 100) / Volume;
  
  Serial.print("Distance = ");
  {
   if (distance < 4 )
   {   
     Serial.print(distance);
     Serial.println(" cm");  
     Line_Notify(message2);
   }
    else if(distance >= 10&&distance <=20 )
    {     
    Serial.print(distance);
    Serial.println(" cm");
    Line_Notify(message1);
    }
     else
     {
      Serial.println("Out of range");
      Line_Notify(message3);
      delay(500);
     }
  }
}


void Line_Notify(String message) 
{
  axTLS::WiFiClientSecure client; // กรณีขึ้น Error ให้ลบ axTLS:: ข้างหน้าทิ้ง

  if (!client.connect("notify-api.line.me", 443)) 
  {
    Serial.println("connection failed");
    return;   
  }

  String req = "";
  req += "POST /api/notify HTTP/1.1\r\n";
  req += "Host: notify-api.line.me\r\n";
  req += "Authorization: Bearer " + String(LINE_TOKEN) + "\r\n";
  req += "Cache-Control: no-cache\r\n";
  req += "User-Agent: ESP8266\r\n";
  req += "Connection: close\r\n";
  req += "Content-Type: application/x-www-form-urlencoded\r\n";
  req += "Content-Length: " + String(String("message=" + message).length()) + "\r\n";
  req += "\r\n";
  req += "message=" + message;
  // Serial.println(req);
  client.print(req);
    
  delay(20);

  // Serial.println("-------------");
  while(client.connected()) 
  {
    String line = client.readStringUntil('\n');
    if (line == "\r") 
    {
      break;
    }
    //Serial.println(line);
  }
  // Serial.println("-------------");
}
