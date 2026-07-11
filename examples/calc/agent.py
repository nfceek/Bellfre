"""
Bellfre Example Agent
Agent Runtime v0.2

Purpose:
    Provides the base agent container for capabilities.

Architecture:
    An agent is not a model.

    An agent is a collection of capabilities
    that can respond to requests.
"""


class Agent:

    def __init__(self, name):
        self.name = name
        self.memory = []
        self.capabilities = []

    def remember(self, item):
        """
        Store agent memory.
        """

        self.memory.append(item)

    def add_capability(self, capability):
        """
        Attach a capability to this agent.

        Example:

            agent.add_capability(
                Calculator()
            )
        """

        self.capabilities.append(capability)

    def think(self, request):
        """
        Route a request to the appropriate capability.

        The agent does not perform the work.
        The agent determines who should perform the work.
        """

        for capability in self.capabilities:

            if capability.can_handle(request):

                return capability.execute_request(request)

        return {
            "success": False,
            "agent": self.name,
            "error": "No capability available"
        }