# Water Production Company Automation System
## OVERVIEW
The Water Production Company Automation System is a web-based application designed to manage records, edit and delete them, and provide access control to various departments within the organization. This system facilitates efficient record-keeping and operational management for different departments, ensuring that each department has access only to its relevant records.

## FEATURES
Record Management: Add, edit, and delete records related to employees, stock, sales, production, and more.
Departmental Access Control: Ensure that each department has access only to its specific records and functionalities.
Database Integration: Utilizes Navicat for database management to handle record storage and retrieval.

## INSTALLATION
### 1-) Setup the database:
Configure Navicat to set up the required databases and tables.
Ensure that the database connection settings in DatabaseConnector.php are correctly configured.

### 2-) Run the application:
You can use PhP storm editor or VS code to run the project.
Access the application via a web browser to interact with the different modules.

### USAGE
Home Page: Access general information and navigation to different modules.

Employee: Manage employee records, including forms for adding, editing, and viewing.

Stock: Manage stock records, with forms for inputting and updating stock information.

Sales: Handle sales records, with forms for sales entries and modifications.

Production: Manage production-related records.

Reports: Generate and view various reports based on different data sets.

Login/Register: Secure access to the system with user authentication and registration.
### Docker Usage:
1-) Build the Docker Image:
```bash
docker build -t water-production-system .
```
2-) Run the Docker Containers:
```bash
docker-compose up
```
3-) Access Application:
Open your web browser and go to http://localhost:8080 to access the application.

4-) Stopping the Containers:
```bash
docker-compose down
```


### CONTACT
For any questions or feedback, please contact ozgulbaytekin@outlook.com

