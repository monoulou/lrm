<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_27ddac9e7cb6a9a4ee8367a28997dbf9b549d82601accf6dd3fb58fff5ce6954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ddbeae949b278f4533c7f6f608b33cc6970ffec186b64dd5bd88c3887f61c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddbeae949b278f4533c7f6f608b33cc6970ffec186b64dd5bd88c3887f61c28->enter($__internal_4ddbeae949b278f4533c7f6f608b33cc6970ffec186b64dd5bd88c3887f61c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_18e6ff10f5617c6c679970b95eb0b00197d2d929bb9e9b6c75c827801a3b9443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e6ff10f5617c6c679970b95eb0b00197d2d929bb9e9b6c75c827801a3b9443->enter($__internal_18e6ff10f5617c6c679970b95eb0b00197d2d929bb9e9b6c75c827801a3b9443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4ddbeae949b278f4533c7f6f608b33cc6970ffec186b64dd5bd88c3887f61c28->leave($__internal_4ddbeae949b278f4533c7f6f608b33cc6970ffec186b64dd5bd88c3887f61c28_prof);

        
        $__internal_18e6ff10f5617c6c679970b95eb0b00197d2d929bb9e9b6c75c827801a3b9443->leave($__internal_18e6ff10f5617c6c679970b95eb0b00197d2d929bb9e9b6c75c827801a3b9443_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
