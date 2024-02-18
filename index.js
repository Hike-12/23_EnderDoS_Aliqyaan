const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');
const bcrypt = require('bcrypt');

const app = express();
const port = 8001;

app.use(bodyParser.json());

const pool = mysql.createPool({
    host: 'localhost',
    user: 'root',
    password: 'futreniyas',
    database: 'RuralAid',
});

// Connection to MySQL
pool.getConnection((err, connection) => {
    if (err) {
        console.error('Error connecting to MySQL:', err);
        return;
    }

    console.log('Connected to MySQL');

    // Release the connection when done
    connection.release();
});


// User Registration
app.post('/register', async(req, res) => {
    const { username, password } = req.body;

    if (!username || !password) {
        return res.status(400).json({ message: 'Username and password are required.' });
    }

    try {
        // Hash the password before storing it in the database
        const saltRounds = 10;
        const hashedPassword = await bcrypt.hash(password, saltRounds);

        // Insert user into the database
        const [rows] = await pool.query('INSERT INTO users (username, hashed_password) VALUES (?, ?)', [username, hashedPassword]);

        res.status(200).json({ message: 'User registered successfully.' });
    } catch (error) {
        console.error('Error registering user:', error.message);
        res.status(500).json({ error: 'Error registering user.' });
    }
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});

Get all doctors
app.get('/doctorinfo', async (req, res) => {
    try {
        const [rows] = await pool.query('SELECT * FROM doctorinfo');
        res.json(rows);
    } catch (error) {
        console.error('Error executing MySQL query:', error);
        res.status(500).json({ error: 'Error retrieving doctor information.' });
    }
});

// Get all medicines
app.get('/medicineinfo', async (req, res) => {
    try {
        const [rows] = await pool.query('SELECT * FROM medicineinfo');
        res.json(rows);
    } catch (error) {
        console.error('Error executing MySQL query:', error);
        res.status(500).json({ error: 'Error retrieving medicine information.' });
    }
});
