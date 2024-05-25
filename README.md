### Event Management System


#### Overview

The Event Management System (EMS) is a web-based application designed to facilitate the organization and management of various events. 
The system allows users to register, log in, and manage their events efficiently. It includes functionalities for user authentication, event creation, and event data management, 
all while ensuring data security and integrity.

#### Features

1. **User Authentication**:
   - **Signup**: New users can create an account by providing a username and password. Passwords are securely stored using MD5 encryption.
   - **Login**: Registered users can log in using their credentials. The system verifies the credentials and redirects users to their dashboard upon successful login.
   - **Session Management**: User sessions are maintained securely to prevent unauthorized access. Users can log out to end their session.

2. **Event Management**:
   - **Event Creation**: Logged-in users can create new events by providing details such as event type, budget, number of attendees, location, and a description.
   - **Event Storage**: Event details are stored in a MySQL database, ensuring data persistence and easy retrieval.
   - **Event Display**: Users can view their created events on their dashboard.

3. **Database Interaction**:
   - **Database Setup**: The application connects to a MySQL database hosted on a local server. It initializes the database and tables required for storing user and event information.
   - **Data Integrity**: The system ensures that usernames are unique and checks for existing users during signup.

4. **Security**:
   - **Password Encryption**: Passwords are encrypted using MD5 before storing in the database.
   - **Input Validation**: User inputs are validated to prevent SQL injection and other common vulnerabilities.

#### Conclusion

The Event Management System provides a robust platform for users to manage event-related tasks efficiently. With a focus on security and user experience, the system ensures data integrity and seamless interaction for users. The project highlights the integration of PHP and MySQL for dynamic web applications and demonstrates essential concepts in database management and web development.
