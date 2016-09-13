<?php

/**
 * Replace login screen logo with WSS logo
 */
    function my_login_logo() { ?>
        <style type="text/css">
            body.login div#login h1 a {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCA0NjEuMSAxNDAuNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDYxLjEgMTQwLjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiMwMDYyQTE7fQ0KCS5zdDF7ZmlsbDojNDA0MDQwO30NCgkuc3Qye2ZpbGw6IzUzMkY4Rjt9DQoJLnN0M3tmaWxsOiNEQzg0MjY7fQ0KPC9zdHlsZT4NCjxnPg0KCTxnPg0KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTU4LjEsOTkuMWgtNC4zbC0xMi44LTM3bC0xMi40LDM3aC00LjNMMTA1LDM5LjdoMTAuOGwxMSwzNS40bDExLjktMzUuNGg0LjZsMTEuOSwzNS40bDExLTM1LjRoMTAuOA0KCQkJTDE1OC4xLDk5LjF6Ii8+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xOTkuNCw5NC4xYy0wLjksMS41LTIuNSwyLjctNC43LDMuN2MtMi4zLDAuOS00LjYsMS40LTcuMSwxLjRjLTQuNiwwLTguMi0xLjItMTAuOS0zLjUNCgkJCWMtMi42LTIuMy00LTUuNi00LTkuOGMwLTUsMS45LTguOCw1LjYtMTEuNmMzLjctMi44LDktNC4yLDE1LjktNC4yYzEuMiwwLDIuNiwwLjIsNC4yLDAuNmMwLTUtMy4yLTcuNi05LjYtNy42DQoJCQljLTMuOCwwLTYuOSwwLjYtOS40LDEuOWwtMi4yLTcuOGMzLjQtMS43LDcuNS0yLjUsMTIuMy0yLjVjNi41LDAsMTEuMywxLjUsMTQuNCw0LjVjMywzLDQuNiw4LjYsNC42LDE2Ljl2OS4yDQoJCQljMCw1LjcsMS4xLDkuMywzLjQsMTAuOGMtMC44LDEuNC0xLjcsMi4zLTIuOCwyLjdjLTEsMC4zLTIuMiwwLjUtMy41LDAuNWMtMS40LDAtMi43LTAuNS0zLjktMS42DQoJCQlDMjAwLjYsOTYuNSwxOTkuOCw5NS4zLDE5OS40LDk0LjF6IE0xOTguNCw3OC4yYy0xLjctMC4zLTMtMC41LTMuOC0wLjVjLTcuOSwwLTExLjgsMi42LTExLjgsNy44YzAsMy44LDIuMiw1LjgsNi43LDUuOA0KCQkJYzYsMCw5LTMsOS05Vjc4LjJ6Ii8+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yMTYuOCwzOS41bDEwLTIuNHY0OC4yYzAsNS4zLDEuNiw4LjQsNC43LDkuNGMtMS41LDIuOS00LjIsNC40LTcuOSw0LjRjLTQuNSwwLTYuOC0zLjEtNi44LTkuNFYzOS41eiIvPg0KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjY0LjIsOTguM2wtMTIuNi0xOS40bC00LjgsNS4xdjE0LjNoLTEwVjM5LjVsMTAtMi40djM0LjhsMTQuMy0xNi40aDEybC0xNC41LDE2LjJsMTcuNCwyNi42SDI2NC4yeiIvPg0KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzE1LjksODBoLTMwLjZjMC4yLDMuNCwxLjQsNi4xLDMuNSw4YzIuMiwxLjksNS4xLDIuOCw4LjcsMi44YzQuNiwwLDgtMS4yLDEwLjQtMy42bDMuOSw3LjYNCgkJCWMtMy41LDIuOS04LjgsNC4zLTE1LjgsNC4zYy02LjUsMC0xMS43LTEuOS0xNS41LTUuN2MtMy44LTMuOC01LjctOS4yLTUuNy0xNmMwLTYuNywyLjEtMTIuMiw2LjMtMTYuNGM0LjItNC4yLDkuMi02LjMsMTUtNi4zDQoJCQljNi4yLDAsMTEuMiwxLjksMTUsNS42YzMuOCwzLjcsNS42LDguNCw1LjYsMTQuMkMzMTYuNyw3NS42LDMxNi40LDc3LjUsMzE1LjksODB6IE0yODUuNiw3Mi41aDIxYy0wLjctNi4zLTQuMi05LjQtMTAuNC05LjQNCgkJCUMyOTAuNSw2My4xLDI4Nyw2Ni4yLDI4NS42LDcyLjV6Ii8+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zNDUuNCw2NC44Yy0xLjgtMS4yLTMuNy0xLjgtNS45LTEuOGMtMi4zLDAtNC40LDEuMS02LjIsMy4yYy0xLjgsMi4xLTIuNyw0LjctMi43LDcuN3YyNC40aC0xMFY1NS41aDEwdjMuOQ0KCQkJYzIuOC0zLjEsNi41LTQuNywxMS4yLTQuN2MzLjQsMCw2LDAuNSw3LjgsMS42TDM0NS40LDY0Ljh6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0xMTguNiwxNS4zaC01Ljh2MTMuMmMwLDEuOCwxLjEsMi45LDIuOCwyLjljMSwwLDIuMS0wLjMsMy0wLjdsMC4yLDIuNGMtMSwwLjQtMi40LDAuNy0zLjQsMC43DQoJCQljLTMuOCwwLTUuMi0yLjMtNS4yLTUuMlYxNS4zaC00LjR2LTIuNGg0LjRWNy4xaDIuNnY1LjhoNS44VjE1LjN6Ii8+DQoJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0xMjEuMSwwaDIuNnYxNi40aDAuMWMxLjEtMi4yLDMuNi00LjEsNi45LTQuMWM2LjMsMCw3LjcsNC4zLDcuNyw4Ljd2MTIuMWgtMi42VjIxLjJjMC0zLjMtMC45LTYuNS01LjEtNi41DQoJCQljLTMuOSwwLTcsMi43LTcsOC4zdjEwLjFoLTIuNlYweiIvPg0KCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTU5LjIsMjkuM2MtMi4xLDMuMS01LjIsNC4zLTguOCw0LjNjLTYuMiwwLTEwLjMtNC40LTEwLjMtMTAuN2MwLTYuMSw0LjItMTAuNiwxMC4xLTEwLjYNCgkJCWM2LjIsMCw5LjUsNC44LDkuNSw5LjV2MS44aC0xN2MwLDIuMiwxLjUsNy42LDcuNyw3LjZjMi43LDAsNS41LTEuNCw2LjgtMy42TDE1OS4yLDI5LjN6IE0xNTcuMiwyMS4zYzAtMy42LTMuMS02LjYtNy02LjYNCgkJCWMtNS43LDAtNy40LDUuNS03LjQsNi42SDE1Ny4yeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMzc2LjgsOTUuOWMtMy44LDIuMi03LjksMi45LTEyLjEsMi45Yy05LjksMC0xNi44LTcuMS0xNi44LTE3YzAtOS45LDYuOS0xNywxNi44LTE3YzQuOCwwLDguNywxLjUsMTEuNyw0LjUNCgkJCWwtMi4yLDIuM2MtMi0yLjQtNi00LTkuNS00Yy04LjUsMC0xMy43LDYuMi0xMy43LDE0LjNjMCw4LjEsNS4zLDE0LjMsMTMuNywxNC4zYzMuNSwwLDYuNi0wLjUsOS4xLTEuOVY4My4zSDM2NnYtMi43aDEwLjhWOTUuOXoiDQoJCQkvPg0KCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMzgxLjcsODIuOGMwLTEuNi0wLjItNC45LTAuMi02aDIuN2MwLDEuNiwwLjEsMy4zLDAuMiwzLjdjMS40LTIuNSwzLjYtNC4zLDYuNy00LjNjMC41LDAsMS4xLDAuMSwxLjYsMC4yDQoJCQlsLTAuMywyLjdjLTAuNC0wLjEtMC44LTAuMi0xLjEtMC4yYy00LjgsMC02LjksMy4zLTYuOSw3LjRWOThoLTIuN1Y4Mi44eiIvPg0KCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJNNDAyLjksNzYuM2M2LjUsMCwxMS4xLDQuNywxMS4xLDExLjFjMCw2LjUtNC42LDExLjEtMTEuMSwxMS4xYy02LjUsMC0xMS4xLTQuNy0xMS4xLTExLjENCgkJCUMzOTEuOCw4MSwzOTYuNCw3Ni4zLDQwMi45LDc2LjN6IE00MDIuOSw5Ni4xYzUuMiwwLDguNC0zLjksOC40LTguN2MwLTQuOC0zLjItOC43LTguNC04LjdjLTUuMiwwLTguNCwzLjktOC40LDguNw0KCQkJQzM5NC41LDkyLjIsMzk3LjcsOTYuMSw0MDIuOSw5Ni4xeiIvPg0KCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJNNDM0LjksOTIuMWMwLDEuNiwwLjIsNC45LDAuMiw2aC0yLjdjMC0xLjYtMC4xLTMuMy0wLjItMy43SDQzMmMtMS4xLDIuMy0zLjgsNC4zLTcuMiw0LjMNCgkJCWMtNi42LDAtOC4xLTQuNS04LjEtOS4xVjc2LjhoMi43djEyLjVjMCwzLjQsMSw2LjgsNS4zLDYuOGM0LjEsMCw3LjMtMi44LDcuMy04LjdWNzYuOGgyLjdWOTIuMXoiLz4NCgkJPHBhdGggY2xhc3M9InN0MSIgZD0iTTQzOC42LDc2LjhoMi43djMuN2gwLjFjMS43LTIuOSw1LjMtNC4zLDguNS00LjNjNi41LDAsMTEuMSw0LjcsMTEuMSwxMS4xYzAsNi41LTQuNiwxMS4xLTExLjEsMTEuMQ0KCQkJYy0zLjIsMC02LjgtMS4zLTguNS00LjNoLTAuMXYxNC4xaC0yLjdWNzYuOHogTTQ0OS45LDk2LjFjNS4yLDAsOC40LTMuOSw4LjQtOC43YzAtNC44LTMuMi04LjctOC40LTguN2MtNSwwLTguOCwzLjktOC44LDguNw0KCQkJQzQ0MS4xLDkyLjIsNDQ0LjksOTYuMSw0NDkuOSw5Ni4xeiIvPg0KCTwvZz4NCjwvZz4NCjxlbGxpcHNlIGNsYXNzPSJzdDAiIGN4PSI4Ny4yIiBjeT0iNDcuNSIgcng9IjYuNCIgcnk9IjYuNCIvPg0KPGc+DQoJPHBhdGggY2xhc3M9InN0MiIgZD0iTTg1LjQsNzYuNGMtMi4zLDAuOS00LjYsMS40LTYuNiwxLjNjLTQuMS0wLjEtNy40LTEuOC0xMS4zLTQuNWMtNy44LTUuNS0xNC4zLTEzLjEtMjIuMS0xNy44DQoJCWMtNy44LTQuOS0xNS43LTctMjMuOS01LjljLTQuMSwwLjUtNy45LDEuNC0xMi4yLDIuMmMtMi4yLDAuNC00LjMsMC43LTYuMywxLjFjLTEsMC4yLTIsMC4zLTMsMC40bDAuMSwwLjNjMC45LDAsMS44LDAuMSwyLjcsMC4xDQoJCWMyLDAuMSw0LjEsMC4yLDYuMSwwLjNjNC4xLDAuMyw4LjEsMC45LDEyLjEsMmM4LDIuMiwxNS44LDcsMjMuNSwxMy40YzcuNyw2LjIsMTUuMywxNC4xLDIzLjIsMTcuNWM0LDEuNiw4LDIsMTIuMi0wLjENCgkJYzIuMS0xLjEsNC4zLTIuOCw2LjUtNS4zYzIuMi0yLjUsNC41LTUuOSw2LjgtMTAuNGMwLTAuMiwwLTAuNCwwLTAuNkM5MS4zLDcyLjYsODcuMyw3NS42LDg1LjQsNzYuNHoiLz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBjbGFzcz0ic3QzIiBkPSJNOTAuNiw2MC41Yy0xLjUsMC44LTMuMiwxLTQuNywxYy0zLTAuMS01LjctMS41LTguNS0zLjVjLTUuNi00LjEtMTEtMTAtMTYuNi0xMy42DQoJCQljLTUuNi0zLjctMTEuNC01LjQtMTcuNC00LjhjLTMsMC4zLTUuOCwwLjktOSwxLjRjLTEuNiwwLjMtMy4xLDAuNS00LjYsMC43Yy0wLjcsMC4xLTEuNSwwLjItMi4yLDAuMmwwLjEsMC4yDQoJCQljMC43LDAuMSwxLjMsMC4xLDIsMC4xYzEuNSwwLjEsMywwLjIsNC40LDAuNGMzLDAuMyw1LjksMC44LDguOCwxLjdjNS44LDEuNywxMS40LDUuNCwxNywxMC4yYzUuNSw0LjcsMTAuOSwxMC42LDE2LjcsMTMuMg0KCQkJYzIuOSwxLjMsNS44LDEuNiw5LDAuMmMxLjYtMC43LDMuMi0xLjksNC44LTMuOGMxLjctMS44LDMuNC00LjIsNS4yLTcuNWMwLTAuMSwwLTAuMywwLTAuNEM5My45LDU4LDkyLjIsNTkuNyw5MC42LDYwLjV6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTEzOC4yLDEyOWgtMTEuNnY4aC0yLjV2LTE3aDIuNXY2LjhoMTEuNlYxMjBoMi41djE3aC0yLjVWMTI5eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNDUuMSwxMjBoMi41djE3aC0yLjVWMTIweiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNjEuMiwxMjcuOGg3Ljh2OS4yaC0xLjhsLTAuNC0yLjRjLTEuMSwxLjMtMi45LDIuOS02LjUsMi45Yy02LjgsMC05LTQuOS05LTguNmMwLTYuNiw0LjUtOS4yLDguOS05LjINCgkJYzMuNSwwLDcuNSwxLjEsOC41LDUuOGgtMi43Yy0wLjgtMi40LTIuNS0zLjYtNS44LTMuNmMtNC41LDAtNi41LDMuMi02LjUsNi44YzAsNC44LDMuMSw2LjcsNi42LDYuN2MzLjcsMCw2LjEtMi4yLDYuNC01LjJoLTUuNg0KCQlWMTI3Ljh6Ii8+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE4Ny4yLDEyOWgtMTEuNnY4aC0yLjV2LTE3aDIuNXY2LjhoMTEuNlYxMjBoMi41djE3aC0yLjVWMTI5eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yMDYuOCwxMjIuMmgtNi40VjEyMGgxNS40djIuMmgtNi40VjEzN2gtMi41VjEyMi4yeiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yMTguMSwxMjBoMTMuN3YyLjJoLTExLjF2NC45aDEwLjh2Mi4yaC0xMC44djUuNUgyMzJ2Mi4yaC0xMy45VjEyMHoiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjQ5LjIsMTI2LjFjLTAuNC0yLjQtMi4yLTQuNC01LjgtNC40Yy00LDAtNi42LDIuMy02LjYsNi45YzAsMy4yLDEuNyw2LjUsNi40LDYuNWMzLDAsNS4yLTEuNCw1LjktNC43aDIuNQ0KCQljLTAuNCwzLjgtMy42LDYuOS04LjUsNi45Yy00LjMsMC04LjktMi40LTguOS05YzAtNC45LDMuMS04LjksOC45LTguOWMzLjQsMCw4LjEsMS41LDguNSw2LjVIMjQ5LjJ6Ii8+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTI2OS4yLDEyOWgtMTEuNnY4aC0yLjV2LTE3aDIuNXY2LjhoMTEuNlYxMjBoMi41djE3aC0yLjVWMTI5eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yNzYuNSwxMzQuMmgyLjl2Mi40YzAsMS45LTAuOCwzLjYtMi45LDR2LTEuMmMxLTAuMywxLjQtMC45LDEuNC0yLjVoLTEuNFYxMzQuMnoiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjkyLjMsMTE5LjloMi40djYuNWgwYzEuMS0xLjcsMy4xLTIuMyw0LjktMi4zYzMsMCw1LjIsMS4zLDUuMiw0LjR2OC41aC0yLjR2LThjMC0xLjgtMS4xLTIuOS0zLjctMi45DQoJCWMtMi4yLDAtNC4xLDEuMy00LjEsMy43djcuMmgtMi40VjExOS45eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zMjAuNywxMzdoLTIuNHYtMS45aDBjLTEuMSwxLjctMy4xLDIuMy00LjksMi4zYy0zLDAtNS4yLTEuMy01LjItNC40di04LjVoMi40djhjMCwxLjgsMS4xLDIuOSwzLjcsMi45DQoJCWMyLjIsMCw0LjEtMS4zLDQuMS0zLjd2LTcuMmgyLjRWMTM3eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zNDMsMTI5LjFjMC0yLjMtMS41LTMtMy0zYy0yLjIsMC00LjEsMS00LjEsMy40djcuNWgtMi40di03LjljMC0yLjMtMS41LTMtMy0zYy0yLjIsMC00LjEsMS4zLTQuMSwzLjd2Ny4yDQoJCWgtMi40di0xMi41aDIuNHYxLjloMGMxLjEtMS43LDMuMS0yLjMsNC45LTIuM2MxLjYsMCwzLjIsMC43LDQuMiwyLjNjMS4xLTEuNCwyLjctMi4zLDUtMi4zYzEuMywwLDQuNywwLjYsNC43LDQuNHY4LjVIMzQzVjEyOS4xeg0KCQkiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzQ4LjcsMTI4LjRjMC4zLTMuMSwyLjUtNC4zLDYuMi00LjNjMi41LDAsNS43LDAuNiw1LjcsMy41djYuN2MwLDAuNywwLjMsMS4xLDEuMSwxLjFjMC4zLDAsMC42LDAsMC44LTAuMQ0KCQl2MS43Yy0wLjYsMC4xLTEuMywwLjEtMS45LDAuMWMtMS4yLDAtMi0wLjMtMi4xLTEuN2MtMSwxLjMtMy4zLDItNS4zLDJjLTQuMSwwLTUuMS0yLjEtNS4xLTMuOGMwLTIuMywxLjQtMy40LDUuNC0zLjlsMi43LTAuMw0KCQljMS4zLTAuMSwyLjItMC40LDIuMi0xLjVjMC0xLjctMS43LTItMy42LTJjLTIsMC0zLjgsMC41LTMuOSwyLjVIMzQ4Ljd6IE0zNTguNCwxMzAuNWMtMC40LDAuNC0xLDAuNi0yLjMsMC43bC0yLjcsMC4zDQoJCWMtMS45LDAuMi0yLjgsMC43LTIuOCwyYzAsMS4yLDEuMiwyLDIuOSwyYzIuNywwLDQuOS0xLjQsNC45LTMuNVYxMzAuNXoiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzY0LjYsMTI0LjVoMi40djEuOWgwYzEuMS0xLjcsMy4xLTIuMyw0LjktMi4zYzMsMCw1LjIsMS4zLDUuMiw0LjR2OC41aC0yLjR2LThjMC0xLjgtMS4xLTIuOS0zLjctMi45DQoJCWMtMi4yLDAtNC4xLDEuMy00LjEsMy43djcuMmgtMi40VjEyNC41eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zODkuOSwxMjAuN2gyLjR2My44aDMuNnYxLjloLTMuNnY3LjdjMCwxLDAuNywxLjQsMS45LDEuNGMwLjUsMCwxLjEtMC4xLDEuNi0wLjJ2MmMtMC44LDAuMS0xLjcsMC4yLTIuNywwLjINCgkJYy0yLjMsMC0zLjMtMS4xLTMuMy0zdi04LjFoLTIuNnYtMS45aDIuNlYxMjAuN3oiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDA0LjgsMTI0LjFjNC45LDAsNy4yLDMuMSw3LjIsNi43YzAsMy42LTIuNCw2LjctNy4yLDYuN2MtNC45LDAtNy4yLTMuMS03LjItNi43DQoJCUMzOTcuNiwxMjcuMiw0MDAsMTI0LjEsNDA0LjgsMTI0LjF6IE00MDQuOCwxMjYuMWMtMy40LDAtNC43LDIuNC00LjcsNC43YzAsMi4zLDEuMyw0LjcsNC43LDQuN2MzLjQsMCw0LjctMi40LDQuNy00LjcNCgkJQzQwOS41LDEyOC41LDQwOC4zLDEyNi4xLDQwNC44LDEyNi4xeiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00MjcuNCwxMzdINDI1di0xLjloMGMtMS4xLDEuNy0zLjEsMi4zLTQuOSwyLjNjLTMsMC01LjItMS4zLTUuMi00LjR2LTguNWgyLjR2OGMwLDEuOCwxLjEsMi45LDMuNywyLjkNCgkJYzIuMiwwLDQuMS0xLjMsNC4xLTMuN3YtNy4yaDIuNFYxMzd6Ii8+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ0My41LDEzMi40Yy0xLDMuNy0zLjMsNS02LjUsNWMtNC45LDAtNi44LTMuNC02LjgtNi42YzAtMy43LDIuMy02LjcsNi44LTYuN2MzLjMsMCw2LDEuNSw2LjUsNC42aC0yLjUNCgkJYy0wLjMtMS42LTEuNi0yLjYtMy44LTIuNmMtMywwLTQuNCwyLTQuNCw0LjdjMCwyLjcsMS40LDQuNyw0LjQsNC43YzIuMSwwLDMuMy0wLjksMy44LTNINDQzLjV6Ii8+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTQ0Ni4yLDExOS45aDIuNHY2LjVoMGMxLjEtMS43LDMuMS0yLjMsNC45LTIuM2MzLDAsNS4yLDEuMyw1LjIsNC40djguNWgtMi40di04YzAtMS44LTEuMS0yLjktMy43LTIuOQ0KCQljLTIuMiwwLTQuMSwxLjMtNC4xLDMuN3Y3LjJoLTIuNFYxMTkuOXoiLz4NCjwvZz4NCjwvc3ZnPg0K);
            background-repeat: no-repeat;
            margin-left: -15px;
            background-size: auto;
            width: 300px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );
    
    
/**
 * Add "designed and developed..." to admin footer.
 */
    add_filter( 'admin_footer_text', 'wss_admin_footer', 11 );
    function wss_admin_footer($content) {
        return 'Site Designed and Developed by <a href="http://www.thewalkergroup.com">The Walker Group</a> in Farmington, CT';
    }
