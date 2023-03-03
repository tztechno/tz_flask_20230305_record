from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index():
    table = "<table>"
    for i in range(8):
        table += "<tr>"
        for j in range(8):
            table += "<td></td>"
        table += "</tr>"
    table += "</table>"
    return render_template('index.html', table=table)


if __name__ == '__main__':
    app.run()
