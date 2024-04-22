# How to Install and Run PHP Programs on Windows

This guide will walk you through the steps to install PHP and run PHP programs on a Windows operating system.

## Step 1: Install PHP

1. **Download PHP:** Go to the [PHP Downloads](https://www.php.net/downloads) page and download the latest version of PHP for Windows. Choose the version according to your system architecture (32-bit or 64-bit).

2. **Extract PHP:** Once the download is complete, extract the contents of the downloaded ZIP file to a folder on your computer. For example, `C:\php`.

3. **Configuration:** Next, navigate to the PHP installation directory and rename the file `php.ini-development` to `php.ini`.

4. **Update System Path:** Add the PHP installation directory to your system's PATH environment variable. This step allows you to run PHP commands from any directory in the command prompt. To do this:
    - Right-click on "This PC" or "My Computer" and select "Properties."
    - Click on "Advanced system settings" on the left-hand side.
    - In the System Properties window, click on the "Environment Variables..." button.
    - Under "System Variables," select "Path" and click "Edit..."
    - Click "New" and add the path to the PHP directory (e.g., `C:\php`).

5. **Verify Installation:** Open a command prompt and type `php -v` to verify that PHP has been installed correctly. You should see the PHP version information.

## Step 2: Run PHP Programs

Once PHP is installed, you can create and run PHP programs using a text editor and the command prompt.

1. **Create PHP File:** Open a text editor (e.g., Notepad, Visual Studio Code) and create a new file with a `.php` extension. Write your PHP code in this file.

2. **Run PHP Program:** Save the file in a directory of your choice. Open a command prompt, navigate to the directory where you saved the PHP file, and type `php filename.php`, replacing `filename.php` with the name of your PHP file. Press Enter to execute the PHP program.

3. **View Output:** If the PHP program produces any output, such as echoing text or printing variables, it will be displayed in the command prompt.

That's it! You've successfully installed PHP and run a PHP program on Windows.

## Additional Resources

- [PHP Manual](https://www.php.net/manual/en/index.php): Official PHP documentation for learning more about PHP syntax, functions, and features.
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/): Interactive PHP tutorial for beginners.
- [PHP.net Windows Installation Instructions](https://www.php.net/manual/en/install.windows.php): Official instructions for installing PHP on Windows.
