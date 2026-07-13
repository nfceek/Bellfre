"""
Bellfre Example Agent
Configuration

Purpose:
    Central configuration for the Bellfre Calculator example.

Business Rules:
    - No provider-specific settings.
    - No API keys.
    - No application logic.
    - Controls how the example agent operates.

Future:
    Provider-specific configuration will move into the
    provider implementation (OpenAI, Claude, Ollama, etc.).
"""

#
# Agent Information
#

AGENT_NAME = "Bellfre Calculator"
AGENT_VERSION = "0.1.0"

#
# Runtime
#

DEBUG = True

#
# Capability Configuration
#

ENABLE_CALCULATOR = True
ENABLE_REASONING = True

#
# Reasoning Configuration
#

# Placeholder for future provider selection.
#
# Examples:
#   "placeholder"
#   "openai"
#   "claude"
#   "ollama"
#
REASONING_PROVIDER = "mock"

OPENAI_MODEL = "gpt-5.5"

OPENAI_API_KEY = ""

#
# Logging
#

LOG_ROUTING = True
LOG_CAPABILITY_SELECTION = True