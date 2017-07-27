<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_16aa9c6fddd3bbf1194d1c7cf9c4554a84416e3e722d9a37638953869b89fb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16aa9c6fddd3bbf1194d1c7cf9c4554a84416e3e722d9a37638953869b89fb67->enter($__internal_16aa9c6fddd3bbf1194d1c7cf9c4554a84416e3e722d9a37638953869b89fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ac413b816df390e1f541883369e9dba8d66f65295356e5a43a575234615ae1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac413b816df390e1f541883369e9dba8d66f65295356e5a43a575234615ae1d3->enter($__internal_ac413b816df390e1f541883369e9dba8d66f65295356e5a43a575234615ae1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16aa9c6fddd3bbf1194d1c7cf9c4554a84416e3e722d9a37638953869b89fb67->leave($__internal_16aa9c6fddd3bbf1194d1c7cf9c4554a84416e3e722d9a37638953869b89fb67_prof);

        
        $__internal_ac413b816df390e1f541883369e9dba8d66f65295356e5a43a575234615ae1d3->leave($__internal_ac413b816df390e1f541883369e9dba8d66f65295356e5a43a575234615ae1d3_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd17de1e93047b27471d747e382b56ab65741b96686c66c8e8c81513a3d71628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd17de1e93047b27471d747e382b56ab65741b96686c66c8e8c81513a3d71628->enter($__internal_dd17de1e93047b27471d747e382b56ab65741b96686c66c8e8c81513a3d71628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_913d211a472b3e41456b8b878b06bade06ca4b02fdadb6ed754d8fe47c1b3920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913d211a472b3e41456b8b878b06bade06ca4b02fdadb6ed754d8fe47c1b3920->enter($__internal_913d211a472b3e41456b8b878b06bade06ca4b02fdadb6ed754d8fe47c1b3920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_913d211a472b3e41456b8b878b06bade06ca4b02fdadb6ed754d8fe47c1b3920->leave($__internal_913d211a472b3e41456b8b878b06bade06ca4b02fdadb6ed754d8fe47c1b3920_prof);

        
        $__internal_dd17de1e93047b27471d747e382b56ab65741b96686c66c8e8c81513a3d71628->leave($__internal_dd17de1e93047b27471d747e382b56ab65741b96686c66c8e8c81513a3d71628_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
