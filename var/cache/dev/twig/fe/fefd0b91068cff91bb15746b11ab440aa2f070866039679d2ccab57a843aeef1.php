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
        $__internal_ffa677c2bcd2dee68b5a0168cb067b7c1f5c3d555be6a3dfb658f75194cdca43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa677c2bcd2dee68b5a0168cb067b7c1f5c3d555be6a3dfb658f75194cdca43->enter($__internal_ffa677c2bcd2dee68b5a0168cb067b7c1f5c3d555be6a3dfb658f75194cdca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_02ec2ab2055d66c46da78759daa88421eb17fcb8b1f6d4ed2c6511af112145b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ec2ab2055d66c46da78759daa88421eb17fcb8b1f6d4ed2c6511af112145b8->enter($__internal_02ec2ab2055d66c46da78759daa88421eb17fcb8b1f6d4ed2c6511af112145b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ffa677c2bcd2dee68b5a0168cb067b7c1f5c3d555be6a3dfb658f75194cdca43->leave($__internal_ffa677c2bcd2dee68b5a0168cb067b7c1f5c3d555be6a3dfb658f75194cdca43_prof);

        
        $__internal_02ec2ab2055d66c46da78759daa88421eb17fcb8b1f6d4ed2c6511af112145b8->leave($__internal_02ec2ab2055d66c46da78759daa88421eb17fcb8b1f6d4ed2c6511af112145b8_prof);

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
