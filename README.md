# inPhasePDF-site-design<br>
# INSPIRATION<br>

What's new with the pdf readers these home stuck days? The usage has increased manyfolds which requires the existing pdf handlers to gear up with tools enhancing experience. So we came up with this "inPhasePDF" DESKTOP APPLICATION which has smart features .
<br>
# WHAT'S NEW ?<br>

Along with basic features , the additional features which makes it a unique pdf viewer includes :<br>

1)The virtual dictionary to fetch meanings even if your computer is not connected to the internet . <br>2) Save the meaning query for future reference and pop them when required. <br>3) The history of every search and store activity is listed and can be revisited. <br>4) Make subjective and brief notes and refer them anytime you feel like.
<br>
# HOW WE BUILT IT ?<br>


We have used PyQt5 library for the GUI and python for the backend . For the dictionary , we have used a Dataset containing 50k words and their meanings.It can show you meanings even if you are not connected to internet . If it doesn't find the word in the dataset then it uses PyDictionary API -which of course requires internet connection- which shows you the meaning and update dataset with the words and meanings which were not present . So in the future , we won't need internet connection to search those words . This is the best advantage over Adobe Acrobat reader, which always needs internet for dictionary purpose.

<br>
We have used HTML5 , CSS3 and bootstrap to create the website .
<br>
# CHALLENGES WE RAN INTO
<br>
We couldn't find free of cost dictionary API for the dictionary's purpose , so we have used PyDictionary. If we get contributions then we can use premium API for the dictionary as a result of which can get the meaning of every word we search for while reading a pdf .
<br>
# ACCOMPLISHMENTS THAT WE ARE PROUD OF
<br>
Around 100+ users have already downloaded the application from our website and have given positive reviews and suggestions . They all are happy with this unique pdf viewer and are also using it frequently . This is a boom for the students in the education field because it has smart features that are not present in any pdf viewer till now .
<br>
# WHAT WE LEARNED
<br>
Front end design of a website , GUI development using PyQt5 
