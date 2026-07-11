from agent import Agent
from calculator import Calculator


agent = Agent("Bellfre")

agent.add_capability(
    Calculator()
)


print(f"{agent.name} ready")

while True:

    user = input("> ")

    if user == "exit":
        break

    response = agent.think(user)

    print(response)