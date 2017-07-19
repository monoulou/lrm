<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fde650fed87ed42f5eab2fa72566a1c1e957499a68df2c15f0ffe14972924e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed7ab2405f76e923c5092e04ae0bb6612c21ec5fce731b88abc57f20be889993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7ab2405f76e923c5092e04ae0bb6612c21ec5fce731b88abc57f20be889993->enter($__internal_ed7ab2405f76e923c5092e04ae0bb6612c21ec5fce731b88abc57f20be889993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_a3e49042f83d7ea0b34993c1955bb21b4619c89351bc1b4d5a5fe1062300d473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e49042f83d7ea0b34993c1955bb21b4619c89351bc1b4d5a5fe1062300d473->enter($__internal_a3e49042f83d7ea0b34993c1955bb21b4619c89351bc1b4d5a5fe1062300d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7ab2405f76e923c5092e04ae0bb6612c21ec5fce731b88abc57f20be889993->leave($__internal_ed7ab2405f76e923c5092e04ae0bb6612c21ec5fce731b88abc57f20be889993_prof);

        
        $__internal_a3e49042f83d7ea0b34993c1955bb21b4619c89351bc1b4d5a5fe1062300d473->leave($__internal_a3e49042f83d7ea0b34993c1955bb21b4619c89351bc1b4d5a5fe1062300d473_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_011d4e46f42fde2382d06c6b7b14ba5aa56f6afb95e1d18e59d0e3731adb601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011d4e46f42fde2382d06c6b7b14ba5aa56f6afb95e1d18e59d0e3731adb601e->enter($__internal_011d4e46f42fde2382d06c6b7b14ba5aa56f6afb95e1d18e59d0e3731adb601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17bd7cba03dc54fb1cc512b6a0dad9965af1a00615a340ed6eeba3e69f1ff750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bd7cba03dc54fb1cc512b6a0dad9965af1a00615a340ed6eeba3e69f1ff750->enter($__internal_17bd7cba03dc54fb1cc512b6a0dad9965af1a00615a340ed6eeba3e69f1ff750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_17bd7cba03dc54fb1cc512b6a0dad9965af1a00615a340ed6eeba3e69f1ff750->leave($__internal_17bd7cba03dc54fb1cc512b6a0dad9965af1a00615a340ed6eeba3e69f1ff750_prof);

        
        $__internal_011d4e46f42fde2382d06c6b7b14ba5aa56f6afb95e1d18e59d0e3731adb601e->leave($__internal_011d4e46f42fde2382d06c6b7b14ba5aa56f6afb95e1d18e59d0e3731adb601e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
