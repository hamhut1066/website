#TODO


__fix the footer!!!__
- this is not important, but I want it done

- create an array of reserved words in the index page that will be passed to a
  handler function
- I've decided on a data structure
    - the actual posts will be flat file, for ease of use  
    but all the files will be indexed in a database  
    this will let me have tagging of pages under certain, random topics
        - I'll have to think of a way to incorporate this into the md files
        - maybe using an html tag at the top of the md files...
        - I could always edit the markdown parser to include commenting out of  
          lines then incorporate it there.
    - I can also, search my files by looking through the database and relevant results.  
        thinking of a way to check all the files, maybe if I hash them and
        keep a copy in the database, and if the hash changes then reparse the file, otherwise carry on.
        - run as a cron job?
        - if I use this method then I will not be able to search for an hour after updating the site, but the data will be instantly accessable
- also so that searching is possible at all :p
    - Do search as you type querying?
