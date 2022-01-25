#import pings

import subprocess
def is_reached(host):
    ping = subprocess.run(["ping", "-w", "1", "-c", "1", host], stdin=subprocess.PIPE, stdout=subprocess.PIPE)
    return ping.returncode == 0

def crawl(ip, flag):
    print(ip)
    print(is_reached(ip))

    if is_reached(ip):
        return 10
    else:
        return 0
    
