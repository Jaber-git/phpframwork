#তুত-১Call from db by making custom database object
https://phpro.org/classes/MySQL-Search-Entire-Database-For-Value.html

form generation:
https://phpro.org/classes/PDOFormGen-Doc.html

--আমি আলাদা database class mysqldtabase তৈরি করি

--কয়েকটি মেথড তৈরি করে তা প্রাইভেট ভেরিয়েবলে রাখি।

--পরে ইন্দেক্স ফাইল থেকে object তৈরি করে তা call করার মাধ্যমে database থেকে ডাটা table প্রদর্শন করাই।

######tut2 to store all object i.g db in registry class call through registry object.

  --registry নামের ক্লাস তৈরি করি যেখানে একটি মেথড  storeObject দুটি object and key পারামিটার
  মাধ্যমে সকল অব্জেক্ট স্টোর করা হয়।
  --getObject এর মাধ্যমে সেই অব্জেক্টকে ধ্রা হয়।

  .........
  ...tut3....working with getURLData
  ...........


  I define a functin getUrl() in regristry class .
  ->if there is any empty controller i mean first last url value is empty.
  then I use array_sift() and Array_pop() function;
  for this there is another function called trim_array() which i define.
  ->This function i get from index file.
  -> also used singlton pattern to access registry class
