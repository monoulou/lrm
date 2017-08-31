<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dfacee0a4cbd9a17ca70c6bcc8c1cffc78e874f3bc43de73b631023d8f14d61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_fce75029cbd5af023fdc83cbe60da7b57a5e6b57b841736410980c0d0c87902b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce75029cbd5af023fdc83cbe60da7b57a5e6b57b841736410980c0d0c87902b->enter($__internal_fce75029cbd5af023fdc83cbe60da7b57a5e6b57b841736410980c0d0c87902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_1bf0ffd18f45619655a455aad208a2a1390e851ad5e5237cddca4a244f2fa47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf0ffd18f45619655a455aad208a2a1390e851ad5e5237cddca4a244f2fa47a->enter($__internal_1bf0ffd18f45619655a455aad208a2a1390e851ad5e5237cddca4a244f2fa47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce75029cbd5af023fdc83cbe60da7b57a5e6b57b841736410980c0d0c87902b->leave($__internal_fce75029cbd5af023fdc83cbe60da7b57a5e6b57b841736410980c0d0c87902b_prof);

        
        $__internal_1bf0ffd18f45619655a455aad208a2a1390e851ad5e5237cddca4a244f2fa47a->leave($__internal_1bf0ffd18f45619655a455aad208a2a1390e851ad5e5237cddca4a244f2fa47a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe08ef1c9d9cd950f21bb0af87a3f544f29076ec4fa3d95d03617872eae5d9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe08ef1c9d9cd950f21bb0af87a3f544f29076ec4fa3d95d03617872eae5d9e7->enter($__internal_fe08ef1c9d9cd950f21bb0af87a3f544f29076ec4fa3d95d03617872eae5d9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4386a156999c90caa357b4ef3452b431b52b4327884e62e3acd1e3d0e6505238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4386a156999c90caa357b4ef3452b431b52b4327884e62e3acd1e3d0e6505238->enter($__internal_4386a156999c90caa357b4ef3452b431b52b4327884e62e3acd1e3d0e6505238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4386a156999c90caa357b4ef3452b431b52b4327884e62e3acd1e3d0e6505238->leave($__internal_4386a156999c90caa357b4ef3452b431b52b4327884e62e3acd1e3d0e6505238_prof);

        
        $__internal_fe08ef1c9d9cd950f21bb0af87a3f544f29076ec4fa3d95d03617872eae5d9e7->leave($__internal_fe08ef1c9d9cd950f21bb0af87a3f544f29076ec4fa3d95d03617872eae5d9e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
