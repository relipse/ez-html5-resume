#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
sass $DIR/resume.scss $DIR/../public_html/css/resume.min.css

