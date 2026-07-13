from .base import ReasoningProvider

class OpenAIProvider(ReasoningProvider):

    provider_name = "openai"

    def execute(self, prompt):

        return {
            "success": False,
            "provider": "openai",
            "error": "OpenAI connector not implemented."
        }