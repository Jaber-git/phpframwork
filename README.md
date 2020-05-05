#তুত-১Call from db by making custom database object

--আমি আলাদা database class mysqldtabase তৈরি করি

--কয়েকটি মেথড তৈরি করে তা প্রাইভেট ভেরিয়েবলে রাখি।

--পরে ইন্দেক্স ফাইল থেকে object তৈরি করে তা call করার মাধ্যমে database থেকে ডাটা table প্রদর্শন করাই।

######tut2 to store all object i.g db in registry class call through registry object.

  --registry নামের ক্লাস তৈরি করি যেখানে একটি মেথড  storeObject দুটি object and key পারামিটার
  মাধ্যমে সকল অব্জেক্ট স্টোর করা হয়।
  --getObject এর মাধ্যমে সেই অব্জেক্টকে ধ্রা হয়।
