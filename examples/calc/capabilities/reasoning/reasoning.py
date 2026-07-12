"""
Bellfre Example Agent Capability
Reasoning Capability v0.3

Purpose:
    Provides a generic reasoning interface for Bellfre agents.

Design Philosophy:

    The agent never calls an LLM directly.

    The agent requests a capability.
    The capability determines how reasoning is provided.

    Today this may route to:
        - Mock Provider
        - ChatGPT
        - Claude
        - Gemini
        - Local LLM

    Future routing may include:
        - Another Bellfre agent discovered through BAT/BDN.

This keeps Bellfre agents independent from any single
AI provider or model ecosystem.
"""


from config import REASONING_PROVIDER



class ReasoningCapability:
    """
    Generic reasoning capability implementation.
    """


    capability_id = "mathematics.explain"


    name = "Reasoning Capability"


    description = (
        "Provides natural language reasoning, explanations, "
        "and contextual responses using the configured provider."
    )



    def can_handle(self, request):
        """
        Determine whether this capability should handle a request.

        MVP routing:
            Non-mathematical questions are sent here.

        Future:
            Intent classification and BCT matching.
        """

        if not isinstance(request, str):
            return False


        operators = [
            "+",
            "-",
            "*",
            "/"
        ]


        # Calculator gets arithmetic requests.
        if any(
            operator in request
            for operator in operators
        ):
            return False


        return True



    def execute_request(self, request):
        """
        Execute a reasoning request.

        Required capability interface.
        """

        return self.execute(request)



    def execute(self, prompt):
        """
        Execute reasoning using configured provider.

        Provider abstraction remains hidden
        from the agent.
        """

        provider = REASONING_PROVIDER.lower()


        if provider == "mock":
            return self._mock(prompt)

        elif provider == "chatgpt":
            return self._chatgpt(prompt)

        elif provider == "claude":
            return self._claude(prompt)

        elif provider == "gemini":
            return self._gemini(prompt)

        elif provider == "local":
            return self._local(prompt)

        elif provider == "discovery":
            return self._discover(prompt)


        return {
            "success": False,
            "capability": self.capability_id,
            "error": f"Unknown reasoning provider: {provider}"
        }



    #
    # Provider Implementations
    #


    def _mock(self, prompt):

        return {
            "success": True,
            "capability": self.capability_id,
            "provider": "mock",
            "model": "none",
            "prompt": prompt,
            "response": (
                "Mock reasoning provider. "
                "No external reasoning engine configured."
            )
        }



    def _chatgpt(self, prompt):

        return {
            "success": False,
            "provider": "chatgpt",
            "error": "ChatGPT connector not implemented."
        }



    def _claude(self, prompt):

        return {
            "success": False,
            "provider": "claude",
            "error": "Claude connector not implemented."
        }



    def _gemini(self, prompt):

        return {
            "success": False,
            "provider": "gemini",
            "error": "Gemini connector not implemented."
        }



    def _local(self, prompt):

        return {
            "success": False,
            "provider": "local",
            "error": "Local reasoning engine not implemented."
        }



    def _discover(self, prompt):
        """
        Future Bellfre discovery routing.

        Flow:

            Request:
                mathematics.explain

            Search:
                BAT / BDN

            Select:
                available capability

            Execute:
                remote agent
        """

        return {
            "success": False,
            "provider": "bellfre_discovery",
            "error": (
                "Bellfre discovery routing not implemented."
            )
        }



#
# Standalone Test
#


if __name__ == "__main__":

    reasoning = ReasoningCapability()


    result = reasoning.execute_request(
        "How were modern mathematical symbols developed?"
    )


    print(result)