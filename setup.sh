#!/bin/bash

mv app.sqlite3 app.sqlite3.bak
sqlite3 app.sqlite3 < setup.sql
