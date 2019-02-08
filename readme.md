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

## End points
1. http://host.com/show-data

2. http://host.com/api/get-data/data-1/East%20Wain
```json
{  
   "data":[  
      {  
         "id":4,
         "data-1":"East Wain",
         "data-2":"West Bennettfort",
         "data-3":"Lake Leatha",
         "data-4":"Rodriguezview",
         "data-5":"Khalilborough",
         "data-6":"Port Ryan",
         "data-7":"Port Libbyhaven",
         "data-8":"West Idella",
         "data-9":"East Ray",
         "data-10":"Lake Orpha",
         "data-11":"Jarodville",
         "data-12":"Leannonshire",
         "data-13":"Joellehaven",
         "data-14":"Alfland",
         "data-15":"South Electahaven",
         "data-16":"South Jaunita",
         "data-17":"Wainochester",
         "data-18":"Lehnerborough",
         "data-19":"North Loriside",
         "data-20":"Port Alphonsoville"
      }
   ],
   "links":{  
      "first":"http:\/\/gkb.test\/api\/get-data\/data-1\/East%20Wain?page=1",
      "last":"http:\/\/gkb.test\/api\/get-data\/data-1\/East%20Wain?page=1",
      "prev":null,
      "next":null
   },
   "meta":{  
      "current_page":1,
      "from":1,
      "last_page":1,
      "path":"http:\/\/gkb.test\/api\/get-data\/data-1\/East%20Wain",
      "per_page":50,
      "to":1,
      "total":1
   }
}
```
3. http://host.com/api/get-data/asdf/asdf 
(Invalid request)
```json
{  
   "status":false,
   "message":"Invalid Resource"
}
```
