import pings

import subprocess
def is_reached(host):
    ping = subprocess.run(["ping", "-w", "1", "-c", "1", host], stdin=subprocess.PIPE, stdout=subprocess.PIPE)
    return ping.returncode == 0

def is_reached_pings(host):
    p = pings.Ping()
    ret = p.ping(host)

    return ret.is_reached()


def crawl(ip, flag):
    print(ip)
    print(is_reached_pings(ip))

    if is_reached_pings(ip):
        return 10
    else:
        return 0
    
