<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #0077cc;
            color: white;
            padding: 20px 40px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        header img {
            height: 40px;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        article {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        article .title {
            font-size: 1.4em;
            font-weight: bold;
            color: #0077cc;
            text-decoration: none;
        }

        article .title:hover {
            text-decoration: underline;
        }

        article .meta {
            color: #888;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        article p {
            line-height: 1.6;
        }

        .card-link {
            display: inline-block;
            margin-right: 10px;
            padding: 6px 12px;
            background-color: #f0f0f0;
            border-radius: 4px;
            text-decoration: none;
            color: #333;
            font-size: 0.9em;
        }

        .card-link:hover {
            background-color: #0077cc;
            color: white;
        }

        footer {
            background-color: #f0f0f0;
            color: #555;
            text-align: center;
            padding: 15px 10px;
            font-size: 0.85em;
            border-top: 1px solid #ddd;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 25px;
            margin: 30px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #0077cc;
            box-shadow: 0 0 5px rgba(0, 119, 204, 0.3);
            outline: none;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        button.btn {
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-primary {
            background-color: #0077cc;
            color: white;
        }

        .btn-primary:hover {
            background-color: #005fa3;
        }

        .btn-add {
            margin-bottom: 20px;
            background-color: #4CAF50; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-add:hover {
            background-color: #45a049;
        }

        .comment {
            background-color: #f9f9f9;
            border-left: 4px solid #007BFF;
            padding: 10px 15px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: background-color 0.3s;
        }

        .comment:hover {
            background-color: #f1f1f1;
        }

        .comment strong {
            font-size: 1rem;
            color: #333;
            display: block;
            margin-bottom: 4px;
        }

        .comment p {
            margin: 0.25em 0;
            line-height: 1.4;
            color: #555;
        }

        .comment-date {
            font-size: 0.85rem;
            color: #999;
            margin-top: 6px;
        }

        .edit-comment-btn {
            display: inline-block;
            margin-top: 5px;
            font-size: 0.85rem;
            color: #007BFF;
            text-decoration: none;
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 2px 4px;
            transition: color 0.2s;
        }

        .edit-comment-btn:hover {
            color: #0056b3;
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <header>
        <a href="http://localhost/php/project/www/index.php"><img src="http://localhost/php/project/templates/icon.png"></a>
        <h1>Мой блог</h1>
    </header>

    <main>