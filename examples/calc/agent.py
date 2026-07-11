class Agent:

    def __init__(self, name):
        self.name = name
        self.memory = []

    def remember(self, item):
        self.memory.append(item)

    def think(self, request):
        return f"{self.name} received: {request}"



agent = Agent("Bellfre")

while True:
    user = input("> ")

    if user == "exit":
        break

    print(agent.think(user))