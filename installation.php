<?php
  require 'include/default.php';

  printHeader(null, null);
  printMenu("installation");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Installation</h2>
    <p>
      As LWJGL is more or less self contained, the actual installation
      typically amounts to extracting the archive, and asserting that 
      everything works fine by running an example. The following paragraphs will
      walk you through the installation on the supported platforms.
    </p>
    <p>For IDE integration click <a href="#ide">here</a>.</p>
    
    <!-- Windows -->
    <h3>Windows</h3>
    <p>
      1. <a href="http://sourceforge.net/project/showfiles.php?group_id=58488">Download</a> the distribution<br>
      2. Unpack the archive, file contents should include (amongst other things):
      <pre>
      lwjgl.dll
      lwjglaudio.dll
      lwjgl.jar
      lwjgl_test.jar</pre>
    </p>
    <p>
      3. Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted.
      once navigated, issue the following command:
      <pre>
      java -cp lwjgl.jar;lwjgl_test.jar; org.lwjgl.test.WindowCreationTest</pre>
    </p>
    <p>
      a window should appear, and you should see the following output:
      <pre>
      Found &lt;number> display modes
      240, 320, WindowCreationTest
      Display created</pre>
    </p>
    <p>
      4. Should you wish to place the dll's in some other directory than you're class files (say /native as opposed to /classes)
      you could do so, by using the java.library.path property. For example
      <pre>
      java -cp classes; -Djava.library.path=native org.lwjgl.test.WindowCreationTest</pre>
    </p>
    
    <!-- linux -->
    <p>&nbsp;</p>
    <h3>Linux</h3>
    <p>
      1. <a href="http://sourceforge.net/project/showfiles.php?group_id=58488">Download</a> the distribution<br>
      2. Unpack the archive, file contents should include (amongst other things):
      <pre>
      liblwjgl.so
      libopenal.so
      lwjgl.jar
      lwjgl_test.jar</pre>
    </p>
    <p>
      3. Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted.
      once navigated, issue the following command:
      <pre>
      java -cp lwjgl.jar:lwjgl_test.jar: org.lwjgl.test.WindowCreationTest</pre>
      Should library loading fail, try using <code>-Djava.library.path</code> to specify the path.<br>
      for example:<br>
      <pre>
      java -cp lwjgl.jar:lwjgl_test.jar: -Djava.library.path=/home/lwjgluser/lwjgl/ org.lwjgl.test.WindowCreationTest</pre>
    </p>
    <p>
      a window should appear, and you should see the following output:
      <pre>
      Found &lt;number> display modes
      240, 320, WindowCreationTest
      Display created</pre>
    </p>
    <p>
      4. Should you wish to place the so files in some other directory than you're class files (say /native as opposed to /classes)
      you could do so, by using the java.library.path property. For example
      <pre>
      java -cp classes -Djava.library.path=native org.lwjgl.test.WindowCreationTest</pre>
    </p>    
    
    <!-- Mac OS X -->
    <p>&nbsp;</p>
    <h3>Mac OS X</h3>
    <p>
      1. <a href="http://sourceforge.net/project/showfiles.php?group_id=58488">Download</a> the distribution<br>
      2. Unpack the archive, file contents should include (amongst other things):
      <pre>
      liblwjgl.jnilib
      libopenal.dylib
      lwjgl.jar
      lwjgl_test.jar</pre>
    </p>
    <p>
      3. Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted.
      once navigated, issue the following command:
      <pre>
      java -cp lwjgl.jar:lwjgl_test.jar: org.lwjgl.test.WindowCreationTest</pre>
    </p>
    <p>
      a window should appear, and you should see the following output:
      <pre>
      Found &lt;number> display modes
      240, 320, WindowCreationTest
      Display created</pre>
    </p>
    <p>
      4. Should you wish to place the so files in some other directory than you're class files (say /native as opposed to /classes)
      you could do so, by using the java.library.path property. For example
      <pre>
      java -cp classes -Djava.library.path=native org.lwjgl.test.WindowCreationTest</pre>
    </p>
  </div>
  
  <p>&nbsp;</p>
  <a name="ide"></a>
  <div class="paragraph_item">
    <h2>IDE integration</h2>
    <p>
      Using LWJGL in your IDE is as as simple as including the jar and telling where the native files are
      to be located. The following lists how to install LWJGL in some popular IDEs.
    </p>
    
    <!-- Eclipse -->
    <h3>Eclipse</h3>
    <p>
      1. Having installed LWJGL on your platform of choice, fire up Eclipse.<br>
      2. Create a new project, and add lwjgl.jar to the build path of your project 
      (Project->Properties->Java build path) by clicking 'Add External JARs' under the Libraries tab<br><br>
      <img src="images/installation/eclipse-1.png"><br><br>
      3. Having created a class to run, create a new run target by selecting the 'Run' icon or using the menu (Run -> Run...)<br><br>
      <img src="images/installation/eclipse-2.png"><br><br>
      select 'New' from the dialog box<br><br>
      <img src="images/installation/eclipse-3.png"><br><br>
      Supply a name for your new target, and make SURE you add the path to the dll files supplying the -Djava.library.path argument
      to the vm. The path you supply is relative to the working directory. Adjust this too if needed.<br><br>
      <img src="images/installation/eclipse-4.png"><br><br>
      4. You should now be able to run the application directly from Eclipse. Run the newly created target to confirm.
    </p>    

    <!-- Netbeans -->
    <p>&nbsp;</p>
    <h3>Netbeans</h3>
    <p>
      1. Having installed LWJGL on your platform of choice, fire up Netbeans.<br>
      2. Create a new project, and mount lwjgl.jar in the project filesystem by right clicking the Filesystem and selecting Mount -> Archive Files<br><br>
      <img src="images/installation/netbeans-1.png"><br><br>
      3. Having created a class to run, you need to setup that class to execute using an External Execution<br><br>
      <img src="images/installation/netbeans-2.png"><br><br>
      Since Netbeans doesn't allow to change the library path you either have to change the working directory of the executor to the lwjgl.dll<br>
      or copy files over to whereever you run from. More info is provided in the <a href="http://www.netbeans.org/kb/faqs/miscellaneous.html#FAQ_34" target="_blank">Netbeans FAQ.</a><br><br>
      <img src="images/installation/netbeans-3.png"><br><br>
      4. You should now be able to run the application directly from Netbeans. Push F6 to verify.
    </p>  
    
    <!-- JCreator -->
    <p>&nbsp;</p>
    <h3>JCreator</h3>
    <p>
	1. Create project. Goto Project->Project Properties, select 'Required Libraries' tab and click New.<br>
	<img src="images/installation/jcreator-1.jpg"><br><br>
	2. Call new library collection LWJGL. Click add->path and add the path to where you installed lwjgl. Then click add->Archive and select the 2 .jar files.<br>
	<img src="images/installation/jcreator-2.jpg"><br><br>
	3. Make sure the LWJGL library is ticked.<br>
	<img src="images/installation/jcreator-3.jpg"><br><br>
    </p>       
  </div>
<?php 
  printFooter();
?>