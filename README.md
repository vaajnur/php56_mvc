## Docker Commands

### Build and Start the Containers

To build the Docker images and start the containers, run:

```
docker-compose up -d --build
```

- `-d`: Runs the containers in detached mode (in the background).
- `--build`: Forces a rebuild of the images.

### Check the Status of the Containers

To see the status of the running containers, use:

```
docker-compose ps
```

### View Logs

To view the logs for all services, run:

```
docker-compose logs
```

To view logs for a specific service (e.g., `nginx` or `php`), use:

```
docker-compose logs nginx
```

### Access the MySQL Database

To access the MySQL database from the command line, run:

```
docker-compose exec db mysql -u root -p
```

Enter the root password (`root`) when prompted.

### Stop the Containers

To stop the running containers, use:

```
docker-compose down
```

### Remove All Containers and Volumes

To stop and remove all containers and associated volumes, run:

```
docker-compose down -v
```

### Rebuild the Containers

If you make changes to the Dockerfile or the application code and want to rebuild the containers, run:

```
docker-compose down
docker-compose up -d --build
```

### Access the Application

Once the containers are running, you can access the application in your web browser at:

```
http://localhost
```

### Access PHP Info

To view the PHP configuration, you can access the PHP info page at:

```
http://localhost/info.php
```

### Database Initialization

The database is initialized with a sample `posts` table and some sample data. If you need to reset the database, you can remove the volume and restart the containers:

```
docker-compose down -v
docker-compose up -d --build
```

This will recreate the database and re-run the initialization script.

## Notes

- Ensure that the Docker daemon is running before executing these commands.
- If you encounter any issues, check the logs for more information.

## License

This project is licensed under the MIT License.
