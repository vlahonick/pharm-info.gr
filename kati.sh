for i in $(find . -type d -regex ``./[^.].*'' -empty); do touch $i"/.gitignore"; done;
