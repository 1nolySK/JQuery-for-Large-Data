# JQuery-for-Large-Data
Faster Webpage loading with large Dataset made easier by JQuery

## Problem-Statement

The load time of our webpage is what matters when it comes to real world users.
So, When you have a large database and you need to show all (most) of the data on your webpage.
Loading the webpage with all the datasets together *or*
Fetching the whole database content to display on webpage at a time puts a high load on server and network and the loading takes time.

Though, the user will see a part of dataset in one view and then he/she scrolls down to view rest.

So **Why fetch the whole data at once ?**
Already the screen is not able to display 50 or 100 rows at once.(Well that's also too much said)

So, how to load the datasets efficiently without compromising the load time of our webpage and it's purpose.

> _large dataset means **500+ entries** in table_

## Observations

Working on a localhost, i found the average time to 
1. **load 10 rows at once is 60-80ms.** ```Well that's sweet```
2. **load 400+ rows at a go takes more than 1000ms.** 
That's a huge increase in time than before and the count increases as the number of rows we try to load increases.

When localhost takes this much time think about real servers..

## Solution using JQuery

With JQuery library we can fetch data from database whenever required.

**We can initially load the page with few entries and then as user scrolls/finishes reading those entries we can make another quick _JQuery Post Request_ and fetch next few entries.**

- Page loading time decreases
- Fetch data as many required
- Make a pleasant user Interaction




