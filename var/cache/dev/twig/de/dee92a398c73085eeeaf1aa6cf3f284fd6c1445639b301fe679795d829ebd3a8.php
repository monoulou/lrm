<?php

/* :client:show.html.twig */
class __TwigTemplate_40ce000aa96c8450e6ca09df3eef2b73ca912dc6b36f666ae63c410464235bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0c3279601f7eccd0862db8e4fd3458b64f89b9b2541c4f029ceb94ebf970fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c3279601f7eccd0862db8e4fd3458b64f89b9b2541c4f029ceb94ebf970fed->enter($__internal_d0c3279601f7eccd0862db8e4fd3458b64f89b9b2541c4f029ceb94ebf970fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_177f77b56d208e6edb04460c3a3662370d379e4c759b8759cfcf6d74f078f770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177f77b56d208e6edb04460c3a3662370d379e4c759b8759cfcf6d74f078f770->enter($__internal_177f77b56d208e6edb04460c3a3662370d379e4c759b8759cfcf6d74f078f770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c3279601f7eccd0862db8e4fd3458b64f89b9b2541c4f029ceb94ebf970fed->leave($__internal_d0c3279601f7eccd0862db8e4fd3458b64f89b9b2541c4f029ceb94ebf970fed_prof);

        
        $__internal_177f77b56d208e6edb04460c3a3662370d379e4c759b8759cfcf6d74f078f770->leave($__internal_177f77b56d208e6edb04460c3a3662370d379e4c759b8759cfcf6d74f078f770_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cd05bf974f962d11349c6247cd2a0f581edeb9a5d3389d2c8f924dc1c3f3a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd05bf974f962d11349c6247cd2a0f581edeb9a5d3389d2c8f924dc1c3f3a04->enter($__internal_7cd05bf974f962d11349c6247cd2a0f581edeb9a5d3389d2c8f924dc1c3f3a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14b4628f8b01f79d59c8f7a2670830f790a9d2ebdbbe0e450b8875c7887a2cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b4628f8b01f79d59c8f7a2670830f790a9d2ebdbbe0e450b8875c7887a2cbf->enter($__internal_14b4628f8b01f79d59c8f7a2670830f790a9d2ebdbbe0e450b8875c7887a2cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fonctionContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "createDate", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_14b4628f8b01f79d59c8f7a2670830f790a9d2ebdbbe0e450b8875c7887a2cbf->leave($__internal_14b4628f8b01f79d59c8f7a2670830f790a9d2ebdbbe0e450b8875c7887a2cbf_prof);

        
        $__internal_7cd05bf974f962d11349c6247cd2a0f581edeb9a5d3389d2c8f924dc1c3f3a04->leave($__internal_7cd05bf974f962d11349c6247cd2a0f581edeb9a5d3389d2c8f924dc1c3f3a04_prof);

    }

    public function getTemplateName()
    {
        return ":client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  135 => 55,  129 => 52,  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>{{ client.denomination }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client.telephone }}</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>{{ client.nomContact }}</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>{{ client.fonctionContact }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ client.etat }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ client.commentaire }}</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>{{ client.createDate }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_client_edit', { 'id': client.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/show.html.twig");
    }
}
