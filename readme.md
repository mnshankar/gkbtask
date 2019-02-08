## Task
Install Latest Laravel application in your local:

* Create a new Table as per Laravel standards 
* Table Name: reports_data
    * Columns :  
         Create 20 columns: data-1 to data-20

* Create a DB Seed Script , this script will insert 10k records in newly created Table

* Create a page in the front end  xxx.com/show-data and display data in Datatable 

* Create following API  
 -> /get-data/<<column_number>>/<<Value>>
            Ex: If I want to get data based on data-1=’Hyderabad’
                 /get-data/data-1/Hyderabad
